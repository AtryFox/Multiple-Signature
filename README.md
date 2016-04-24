Multiple Signature
==================

*Multiple Signature* is a simple script with you can use another image in your signature for each thread on mybb boards.

### How it works ###
The script knows in which thread you are. PHP gets this information of the HTTP_REFERER. Now, the script is checking whether the thread has its own image and if the image is linked. If the image is linked, the second image will be replaced by a 1x1 invisible image and the first image will be shown. If the image is not linked, the second image will be shown and the first image will be replaced by a 1x1 invisible image (see below).

### How to contribute ###
1. Fork this project.
2. Write code.
3. Make pull requests.

### Installation ###
1. Clone the project. `git clone git@github.com:DerAtrox/Multiple-Signature.git`
2. Add the cases you want to *config.php*. (see below)
3. Change the bbcode of your signature in the forum:

```
[url=http://domain.tld/path/to/multiple-signature/link.php]
[img]http://domain.tld/path/to/multiple-signature/[/img][/url]
[img]http://domain.tld/path/to/multiple-signature/nolink/[/img]
```

### Configuration ###
In the config, you can add cases using the thread id, the path of the image, a boolean which says whether the image is linked or not and the url, if the image is linked.
`addCase($tid, $img, $urlb, $url);`

|Parameter|Description|
|---------|-----------|
|`$tid`   | The thread id. How to get the thrad id: `http://epic-board.tld/showthread.php?tid=1337` 1337 is the thread id.|
|`$img`   | The filename of the image. The image must be in the *images* folder!|
|`$urlb`  | Says if the image is linked or not. (boolen: true/false)|
|`$url`   | The url, if the image is linked.|


#### Special thanks to [@Raptilicus](https://twitter.com/raptilicus)! ####
He helped me a lot! Thanks Rapti! :3
