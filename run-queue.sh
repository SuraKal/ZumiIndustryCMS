# --- Laravel Queue Runner Script ---
# Author: Surafel Kaleab / OneFlow Creative
# Purpose: Run all available queued jobs safely on shared hosting (cPanel)

# === CONFIGURATION ===
PROJECT_DIR="/home/darihaga/laravel_files/go_coffee"   # change this to your Laravel app root
PHP_PATH="/usr/local/bin/php"              # confirm path via `which php`
LOG_FILE="$PROJECT_DIR/storage/logs/queue.log"

# === SCRIPT EXECUTION ===
cd "$PROJECT_DIR" || exit

# Check if another queue worker is already running
if pgrep -f "artisan queue:work" > /dev/null
then
    echo "$(date '+%Y-%m-%d %H:%M:%S') - Queue worker already running, skipping..." >> "$LOG_FILE"
    exit 0
fi

# Run all available jobs until queue is empty, then exit
$PHP_PATH artisan queue:work --stop-when-empty --timeout=120 --tries=3 --no-interaction >> "$LOG_FILE" 2>&1

echo "$(date '+%Y-%m-%d %H:%M:%S') - Queue run completed." >> "$LOG_FILE"
