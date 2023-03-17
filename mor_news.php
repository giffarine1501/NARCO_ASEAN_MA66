<!-- -----------start header----------- -->
<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<!-- -----------start header2----------- -->
<div class="bg-short setmt">
    <div class="container py-4 text-center">
        <h1 class="color-topic">ข่าวสาร</h1>
        <small><a href="index.php" class="color-topic2">หน้าหลัก</a></small>
    </div>
</div>

<!-- -----------start news----------- -->
<div class="container p-0 mt-4 mb-4">
    <form action="#" method="POST">
        <div class="row mx-0">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-2 ">
                <input type="text" name="news-name" id="news-name" class="form-control button-set shadow-sm"
                    placeholder="ค้นหาข่าวที่คุณสนใจ">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 p-2 ">
                <input type="date" name="start-date" id="start-date" class="form-control button-set shadow-sm">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 p-2 ">
                <input type="date" name="end-date" id="end-date" class="form-control button-set shadow-sm">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-2 ">
                <div class="d-flex">
                    <select id="news-group" class="form-control button-set2 ">
                        <option selected>หมวดหมู่ทั้งหมด</option>
                        <option>ข่าวทั่วไป</option>
                        <option>ข่าวล่าสุด</option>
                        <option>ข่าวยอดนิยม</option>
                    </select>
                    <button type="submit" name="enter-search" class="btn button-set3 shadow-sm">ค้นหา</button>
                </div>
            </div>
        </div>
    </form>
    <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n1.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12  col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="news_detail.php" target="_blank" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="news_detail.php" target="_blank" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n2.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="#" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="#" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n3.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="#" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="#" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n4.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="#" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="#" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n5.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="#" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="#" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
            <div class="card-news shadow-sm">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 text-center">
                        <img src="assets/img/news/n6.webp" class="img-news-all" alt="..." title="">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0 ">
                        <div class="card-body set ">
                            <ul class="list-unstyled date-view d-flex  my-0">
                                <li><i class="fas fa-calendar"></i> 27 มกราคม 2566</li>&nbsp;&nbsp;&nbsp;&nbsp;
                                <li><i class="fas fa-eye"></i> 65</li>
                            </ul>
                            <ul class="list-unstyled  my-0 pb-2">
                                <a href="#" class="date-view">
                                    <li><i class="fas fa-bookmark"></i> ข่าวล่าสุด</li>
                                </a>
                            </ul>
                            <a href="#" class="text_news ">
                                <h5> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</h5>
                            </a>
                            <a href="#" class="text_news2 ">
                                <p> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 col-lg-12 col-md-12 p-0">
            <div class="pagination pt-5 ">
                <a class="pagi-color " href="#"><i class="fas fa-chevron-left"></i></a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a class="pagi">...</a>
                <a href="#">16</a>
                <a href="#">17</a>
                <a href="#">18</a>
                <a class="pagi-color " href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        
    </div>

</div>

<!-- -----------start footer----------- -->
<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>