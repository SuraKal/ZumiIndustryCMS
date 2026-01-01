<?php

namespace App\Filament\Resources\Projects\Schemas;

use App\Models\Project;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('General Information')
                    ->columns(1)
                    ->schema([
                        TextInput::make('code')
                            ->label('Project Code')
                            ->required()
                            ->maxLength(32)
                            ->unique(Project::class, 'code', ignoreRecord: true)
                            ->default(function () {
                                // Generate something like: Proj-X-606-391
                                $prefix = 'Proj';
                                $segment1 = Str::upper(Str::random(1)); // one random uppercase letter
                                $segment2 = random_int(100, 999);
                                $segment3 = random_int(100, 999);

                                return "{$prefix}-{$segment1}-{$segment2}-{$segment3}";
                            })
                            ->helperText('Unique code for this project. Auto-generated if left empty.'),

                        TextInput::make('name')
                            ->label('Project Name')
                            ->required()
                            ->minLength(3)
                            ->maxLength(50)
                            ->helperText('Enter a descriptive name for the project.'),

                        TextInput::make('overview')
                            ->label('Overview')
                            ->nullable()
                            ->maxLength(100)
                            ->helperText('Short summary of the project (optional) Max(100 characters).'),
                    ]),

                Section::make('Description')
                    ->columns(1)
                    ->schema([
                        MarkdownEditor::make('description')
                            ->label('Detailed Description')
                            ->required()
                            ->minLength(3)
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->helperText('Provide detailed information about the project. Max 1000 characters.')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'heading',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'table',
                                'undo',
                            ])
                            ,
                    ]),

                Section::make('Visibility & Thumbnail')
                    ->columns(1)
                    ->schema([
                        Toggle::make('is_visible')
                            ->label('Visible to Users')
                            ->required()
                            ->helperText('Toggle whether this project should be visible on the website.'),

                        FileUpload::make('thumbnail')
                            ->label('Thumbnail Image')
                            ->nullable()
                            ->imageEditor()
                            ->directory('project-image')
                            ->maxSize(4096)
                            ->helperText('Upload a main image for the project (max 4MB).'),
                    ]),

                Section::make('Gallery Images')
                    ->collapsible()
                    ->collapsed(true)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('project-image')
                            ->multiple()
                            ->reorderable()
                            ->imageEditor()
                            ->hiddenLabel()
                            ->helperText('Upload multiple gallery images (max 5MB each).')
                            ->maxSize(4096),
                    ]),

            ]);
    }
}
