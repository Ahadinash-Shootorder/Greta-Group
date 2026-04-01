<!-- Page Heading Section Start -->
<div class="pagehding-sec">
    <div class="breadcrumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1 class="page-title"><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></h1>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?php if(isset($page_title)&&!empty($page_title)) { echo $page_title; } ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->