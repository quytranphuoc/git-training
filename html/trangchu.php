<?php
require('../html/modules/connection.php');

?>
<!DOCTYPE html>
<html lang="en, vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Nice Job</title>
    <link rel="stylesheet" href="../CSS/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/trangChu.css">
    <link rel="stylesheet" href="../css/stylechung.css">
    <link rel="icon" href="../images/logo nicejob.png">
    <script src="../css/bootstrap.bundle.min.js"></script>
    <script src="../css/jquery-3.6.0.min.js"></script>
</head>
<?php
require('../includes/header.php');
require('../html/modules/add_users_info.php');
?>
<div class="content container">
    <div class="jobs-content">
        <div class="header-jobs-content">
            <img src="../Images/jobicon.png" alt="job_icon">
            <h3>Tìm kiếm công việc của bạn</h3>
        </div>
        <form action="../html/vieclam.php" method="get">
            <div class="search-form">
                <div class="form-jobs-content">
                    <a href="#collapseMenuChoose" data-bs-toggle="collapse" aria-controls="collapseMenuChoose" role="button"><input name="search_bar" type="text" class="form-control" id="jobsName" placeholder="Nhập công việc, vị trí bạn muốn ứng tuyển..."></a>
                </div>
                <div class="button-form">
                    <button type="submit" name="search" class="btn btn-primary me-2 ">Tìm việc ngay</button>
                </div>
            </div>
            <div class="collapse-select">
                <div class="collapse" id="collapseMenuChoose">
                    <div class="select">
                        <div class="form-group">
                            <select name="career" class="form-control select">
                                <option value="0">Tất cả vị trí</option>
                                <?php require_once('../html/modules/import_career.php'); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="salary" class="form-control select">
                                <option value="0">Tất cả mức lương</option>
                                <?php require_once('../html/modules/import_salary.php') ?>
                            </select>
                        </div>
                    </div>
                    <div class="select">
                        <div class="form-group">
                            <select name="province" class="form-control select">
                                <option value="0">Tất cả địa điểm</option>
                                <?php require_once('../html/modules/import_province.php') ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="level" class="form-control select">
                                <option value="0">Tất cả cấp bậc</option>
                                <?php require_once('../html/modules/import_level.php') ?>
                            </select>
                        </div>
                    </div>
                    <div class="select">
                        <div class="form-group">
                            <select name="way_to_work" class="form-control select">
                                <option value="0">Tất cả hình thức làm việc</option>
                                <?php require_once('../html/modules/import_way_to_work.php') ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="introduce-company">
            <div class="title-introduce">
                <h4>Cách công ti tuyển dụng hàng đầu trên NICE JOB</h4>
            </div>
            <div class="image-introduce">
                <div class="img-block">
                    <img src="../Images/onemoutn.webp" alt="onemoutn">
                </div>
                <div class="img-block" id="fpt">
                    <img src="../Images/fpt.webp" alt="fpt">
                </div>
                <div class="img-block">
                    <img src="../Images/prudential.webp" alt="prudential">
                </div>
                <div class="img-block">
                    <img src="../Images/tiki.webp" alt="tiki">
                </div>
                <div class=" img-block ">
                    <img src="../Images/teachcombank.webp" alt="teachcombank">
                </div>
                <div class="img-block ">
                    <img src="../Images/viettel.webp" alt="viettel">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-center">
        <h3>Hãy đến với chúng tôi nếu bạn là:</h3>
    </div>
    <div class="hoso-cv">
        <div>
            <img src="../Images/company2.jpg" alt="">
        </div>

        <div>
            <div class="hoso-cv-content">
                <h3>Nhà tuyển dụng</h3>
                <p>Bạn là nhà tuyển dụng vào muốn tìm kiếm những nhân viên tiềm năng.</p>
                <button type="button" class="btn btn-primary" id="dangtuyenbtn">Đăng tuyển dễ dàng</button>
            </div>
            <div class="taocv-moi">
                <div class="hoso-cv-content" id="cv-box1">
                    <h3>Người ứng tuyển</h3>
                    <p>Bạn là nhà ứng tuyển và muốn tìm kiếm công việc phù hợp với bạn!</p>
                    <button type="button" class="btn btn-primary" id="dangtuyenbtn">Tìm việc nhanh chóng</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="company-content container ">
    <div>
        <h3>Tìm kiếm những công ty chất lượng</h3>
    </div>
    <div class="cong-ty-block ">
        <div class="danh-sach-cong-ty " id="company1 ">
            <a href="../html/cong_ty.php">
                <h3>Danh sách công ty</h3>
                <p>Danh sách các công ty đang tuyển dụng được cập nhật theo thời gian với đa dạng loại ngành nghề, lĩnh vực</p>
            </a>
        </div>
        
    </div>
</div>
<div class="about-us-content ">
    <div class="title-about-us ">
        Về Chúng tôi - NICE JOB
    </div>
    <div class="description-about-us ">
        Chào mừng đã đến với NiceJob - Nền tảng tuyển dụng số hàng đầu Việt Nam. Website cung cấp một nền tảng tuyển dụng số mới nhất hiện nay. Cung cấp cho người dùng khả năng tìm kiếm công việc nhanh chóng, đầy đủ mọi ngành nghề, thiết kế CV, giao diện đẹp,
        dễ sử dụng. Tìm hiểm thêm về chúng tôi ở đường dẫn bên dưới.
    </div>
    <div class="button-about-us ">
        <button type="button" class="btn btn-primary me-2 "><a href="../html/thongtinweb.php" style="color: #f9f9f9;">Tìm hiểu thêm...</a></button>
    </div>
</div>
</div>
<?php include('../includes/footer.php') ?>