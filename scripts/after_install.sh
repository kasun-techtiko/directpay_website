#!/bin/bash

GROUP="$DEPLOYMENT_GROUP_NAME"
FOLDER_NAME="dpweb"
DEV_STAGE="dpweb_dev"
LIVE_STAGE="dpweb_dev"
ENV_FILE=""
LOG_FILE="/var/www/"$FOLDER_NAME"/deploy.log"
dt=$(date '+%d/%m/%Y %H:%M:%S');
SLACK_HOOK_URL="https://hooks.slack.com/services/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"

if [ $GROUP == $LIVE_STAGE ]; then
    ENV_FILE="dev.env"
fi

if [ $GROUP == $DEV_STAGE ]; then
    ENV_FILE="dev.env"
fi

echo "================================" >> $LOG_FILE
echo $dt >> $LOG_FILE
echo $GROUP >> $LOG_FILE
echo $FOLDER_NAME >> $LOG_FILE
echo $ENV_FILE >> $LOG_FILE

curl -X POST -H 'Content-type: application/json' --data '{"footer":"Deployment","color":"warning","text":":passenger_ship: '$GROUP' AfterInstall-START"}' $SLACK_HOOK_URL
# copy vcs to location # move to location # Run composer - set permission - copy env
sudo rsync -av /home/ec2-user/vcs/$FOLDER_NAME /var/www/ &&
cd /var/www/$FOLDER_NAME &&
#sudo composer install >> $LOG_FILE &&
#sudo rm -rf vendor/ >> $LOG_FILE &&
#sudo rm -rf composer.lock >> $LOG_FILE &&
sudo composer install --ignore-platform-reqs >> $LOG_FILE &&
sudo chmod -R 777 bootstrap >> $LOG_FILE &&
sudo chmod -R 777 storage >> $LOG_FILE &&
sudo chmod -R 777 vendor >> $LOG_FILE &&
sudo chown -R nginx:nginx storage >> $LOG_FILE &&
php artisan storage:link >> $LOG_FILE &&
php artisan route:clear >> $LOG_FILE &&
php artisan config:clear >> $LOG_FILE &&
php artisan view:clear >> $LOG_FILE &&
php artisan optimize:clear >> $LOG_FILE &&
sudo cp "$ENV_FILE" .env >> $LOG_FILE &&
#php artisan config:cache >> $LOG_FILE &&
#sudo rm -rf dev.env >> $LOG_FILE &&
#sudo rm -rf prod.env >> $LOG_FILE &&
#sudo rm -rf prod.env >> $LOG_FILE &&
sudo rm -rf deploy.sh >> $LOG_FILE &&
sudo rm -rf .babelrc >> $LOG_FILE &&
sudo rm -rf .circleci >> $LOG_FILE &&
sudo rm -rf .editorconfig >> $LOG_FILE &&
#sudo rm -rf .env >> $LOG_FILE &&
sudo rm -rf .env.example >> $LOG_FILE &&
sudo rm -rf .gitattributes >> $LOG_FILE &&
sudo rm -rf .gitignore >> $LOG_FILE &&
sudo rm -rf .phpstorm.meta.php >> $LOG_FILE &&
sudo rm -rf .styleci.yml >> $LOG_FILE &&
rm -rf /home/ec2-user/vcs/$FOLDER_NAME &&
curl -X POST -H 'Content-type: application/json' --data '{"footer":"Deployment","color":"warning","text":":passenger_ship: '$GROUP' AfterInstall-END"}' $SLACK_HOOK_URL
