#!/bin/bash -l

set -o errexit -o nounset -o xtrace

envsubst < $APP_HOME/.env.dist > $APP_HOME/.env
