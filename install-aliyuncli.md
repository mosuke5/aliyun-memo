# aliyuncliインストール
- centos7環境

```
$ curl -O https://bootstrap.pypa.io/get-pip.py | sudo python
$ pip -V
pip 7.1.0 from /usr/lib/python2.7/site-packages (python 2.7)
$ sudo pip install aliyuncli

//CLIだけでは動かず、SDKも入れる必要あり。とりあえず主要な４つ入れておく。
$ sudo pip install "aliyun-python-sdk-ecs"
$ sudo pip install "aliyun-python-sdk-rds"
$ sudo pip install "aliyun-python-sdk-oss"
$ sudo pip install "aliyun-python-sdk-slb"
```
