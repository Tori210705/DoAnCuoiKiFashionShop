<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập - LSOUL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">
</head>
<body class="bg-light">

    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center login-area">
        <div class="card shadow login-box w-100" style="max-width: 400px;">
            <form class="form-login w-100" method="POST" action="">
                <div class="card-header text-white text-center login-form-head rounded-top" style="background-color: #7c3aed;">
                    <h4 class="mb-1 fw-bold">Đăng Nhập</h4>
                    <p class="mb-0">Chào mừng bạn đến với trang quản trị của LSOUL</p>
                </div>
                <div class="card-body login-form-body">
                    <div class="mb-3 form-gp position-relative">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control pe-5" id="email" name="email">
                        <i class="ti-email position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                        <div class="text-danger small"></div>
                    </div>

                    <div class="mb-3 form-gp position-relative">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control pe-5" id="password" name="password">
                        <i class="ti-lock position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                        <div class="text-danger small"></div>
                    </div>

                    <div class="row mb-3 rmber-area">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="customControlAutosizing">
                                <label class="form-check-label" for="customControlAutosizing">
                                    Nhớ tài khoản
                                </label>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="text-primary fw-medium">Quên mật khẩu?</a>
                        </div>
                    </div>

                    <div class="submit-btn-area text-center">
                        <button type="submit" id="form_submit" class="btn btn-outline-dark px-4 rounded-pill">
                            Đăng nhập <i class="ti-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
