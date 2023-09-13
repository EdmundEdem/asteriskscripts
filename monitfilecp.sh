#!/bin/bash

folder=/var/spool/asterisk/monitor/
copy_date=`date '+%Y/%m/%d/' --date='1 days ago'`

path=$folder$copy_date

#mkdir -p /opt/recordings/monthly/$copy_date
mkdir -p /opt/nas/GCP_Call_records/$copy_date

rsync -vsrt $path /opt/nas/GCP_Call_records/$copy_date
