#!/bin/sh

cd `dirname $0`

# For Linux.
rsync -acvz --delete --exclude='.gitkeep' --exclude 'Vendor.php' output/Config/ ../src/Config/
rsync -acvz --delete --exclude='.gitkeep' output/Structure/Vendor/ ../src/Structure/Vendor/
