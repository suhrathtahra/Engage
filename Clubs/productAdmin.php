<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        .container-fluid {
            padding-top: 50px;
        }

        .container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #6c757d;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 10px;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        input[type=file] {
            width: 100%;
            color: #444;
            padding: 10px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #ced4da;
            outline: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #495057;
            border-color: #495057;
        }

        .modal-body {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center">Add Product Details</h2>
            <form action="img_Action.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="name">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
                </div>
                <label for="image" class="form-label">Upload Image</label>
                <div class="mb-3">
                    
                    <div class="upload-btn-wrapper">
                        <input type="file" id="image" name="image" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="productDetails" class="form-label">Product Details</label>
                    <textarea class="form-control" id="productDetails" rows="3" placeholder="Enter product details"
                        name="details"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
