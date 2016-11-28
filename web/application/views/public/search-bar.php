<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="s-bar">
    <div class="container">
        <ul id="search-bar" class="nav nav-pills">
            <li><a id="type-all" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order" ?>" class="label">全部</a></li>
            <li><a id="type-0" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=0" ?>" class="label">视频</a>
            </li>
            <li><a id="type-1" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=1" ?>" class="label">图片</a>
            </li>
            <li><a id="type-2" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=2" ?>" class="label">文档</a>
            </li>
            <li><a id="type-3" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=3" ?>" class="label">音乐</a>
            </li>
            <li><a id="type-4" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=4" ?>" class="label">压缩包</a>
            </li>
            <li><a id="type-5" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=5" ?>" class="label">软件</a>
            </li>
            <li><a id="type-dir" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=dir" ?>" class="label">文件夹</a>
            </li>
            <li><a id="type-abm" class="pan-s"
                   href="/search?q=<?php echo urlencode("$key_word") . "&ord=$order&type=abm" ?>" class="label">专辑</a>
            </li>
        </ul>
    </div>
</div>