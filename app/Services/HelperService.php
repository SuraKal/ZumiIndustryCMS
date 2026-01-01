<?php



    namespace App\Services;
    use App\Models\Team;
    use App\Models\Testimonial;
    use App\Models\Socialmedia;
    use App\Models\Page;
    use App\Models\Setting;
    use App\Models\Faq;
use App\Models\Project;
use App\Models\Blog\Post;
use App\Models\Product;

class HelperService
{
    public function getAllTeams()
    {
        return Team::query()->where('is_visible', true);
    }
    public function getAllTestimonials()
    {
        return Testimonial::query()->where('is_visible', true);
    }
    public function getAllFaqs()
    {
        return Faq::query()->where('is_visible', true);
    }
    public function getAllProjects()
    {
        return Project::query()->where('is_visible', true);
    }
    public function getAllProducts()
    {
        return Product::query()->where('is_visible', true);
    }
    
    public function getAllPosts()
    {
        return Post::query()->where('is_visible', true);
    }
    public function getAllSocials()
    {
        return Socialmedia::query()->where('slug', 'go-coffee');
    }

    public function getPageInfo(){
        return Page::query();
    }
    public function getSettingInfo(){
        return Setting::query();
    }

    public function getPageInfoContent($slug){
        return $this->getPageInfo()
            ->where('slug', $slug)
            ->select(['content'])
            ->first();
    }

    public function getSettingInfoContent($key){
        return $this->getSettingInfo()
            ->where('name', $key)
            ->select(['data'])
            ->first();
    }

    public function getPageInfoAll($slug){
        return $this->getPageInfo()
            ->where('slug', $slug)
            ->select(['content','title','slug','id'])
            ->first();
    }
    public function getMultipleSettings(array $keys)
    {
        return $this->getSettingInfo()->whereIn('name', $keys)->pluck('data', 'name');
    }


    public function getGalleryImages($handle)
    {
        $gallery = \App\Models\Gallery::where('slug', $handle)->first();

        return $gallery ? $gallery?->image_paths : [];
    }


}
