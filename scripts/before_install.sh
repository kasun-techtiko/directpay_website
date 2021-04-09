#!/bin/bash

GROUP="$DEPLOYMENT_GROUP_NAME"
FOLDER_NAME="dpweb"
SLACK_HOOK_URL="https://hooks.slack.com/services/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"

if [ -d /home/ec2-user/vcs/$FOLDER_NAME ]; then
    rm -rf /home/ec2-user/vcs/$FOLDER_NAME
fi
mkdir -vp /home/ec2-user/vcs/$FOLDER_NAME && curl -X POST -H 'Content-type: application/json' --data '{"footer":"Deployment","color":"warning","text":":passenger_ship: '$GROUP' BeforeInstall"}' $SLACK_HOOK_URL

