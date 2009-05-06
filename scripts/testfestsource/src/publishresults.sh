
cd /home/testfestreports/testRunDir

tar -cvzf tf.tar *

cp tf.tar /var/www/html/publishresults/

cd  /var/www/html/publishresults/

tar -xvf tf.tar


