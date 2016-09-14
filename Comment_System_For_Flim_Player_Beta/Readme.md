这就是个视频播放器的评论系统<br>
为了防止有人恶意刷评论，所以系统会通过html注释的方式记录用ip<br>
主页是php include把两个页面组合起来的，估计到时候用到视频页面，还要用一个include……<br>
upload_number初始值是0，用于记录评论的楼层的<br>
其他的看注释，两个页面分别是显示评论与提交评论（form_upload.php/form_process.php）<br>
