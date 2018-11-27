: For Windows.

cd /d %~dp0

robocopy output/Config/ ../src/Config/ /mir /xf Vendor.php
robocopy output/Structure/Vendor/ ../src/Structure/Vendor/ /mir
