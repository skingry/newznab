#!/usr/local/bin/bash

source ~/.profile

# Define how long to sleep between runs
SLEEP="60"

# Might as well say the last time we optimized the Db was right now...
LAST=`date +%s`

while :

do
  # Grab the current time since epoch
  CURRENT=`date +%s`

  # Update binaries
  php update_binaries.php

  # Update releases
  php update_releases.php

  # Compare the saved epoch time with the epoch time of the last Db optimization
  DIFF=$((${CURRENT}-${LAST}))

  # If greater than one day, then do it!
  if [ ${DIFF} -gt 86400 ]; then
    LAST=`date +%s`
    echo "Optimizing DB..."
    php optimise_db.php
  fi

  # Stop. Hammertime.
  echo "waiting ${SLEEP} seconds..."
  sleep ${SLEEP}
done

