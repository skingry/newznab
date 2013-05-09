#!/bin/sh
# call this script from within screen to get binaries and processes releases

set -e

export NEWZNAB_PATH="/data/newznab/misc/update_scripts"
export NEWZNAB_SLEEP_TIME="60" # in seconds
LASTOPTIMIZE=`date +%s`

while :

do
  CURRTIME=`date +%s`
  cd ${NEWZNAB_PATH}
  php ${NEWZNAB_PATH}/update_binaries.php
  php ${NEWZNAB_PATH}/update_releases.php

  DIFF=$(($CURRTIME-$LASTOPTIMIZE))
  if [ $DIFF -gt 86400 ]; then
    LASTOPTIMIZE=`date +%s`
    echo "Optimizing DB..."
    php ${NEWZNAB_PATH}/optimise_db.php
  fi

  echo "waiting ${NEWZNAB_SLEEP_TIME} seconds..."
  sleep ${NEWZNAB_SLEEP_TIME}

done
