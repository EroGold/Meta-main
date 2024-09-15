
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">

  
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Preloader -->
  @include('partials.preload')

  <!-- Navbar -->
  @include('partials.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('partials.side_bar3');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý sản phẩm </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                    <i class="fa-solid fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sold</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      
                      <th><i style="display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">{{$product->info}}</i></th>
                      <th>{{$product->price}}</th>
                      <th>{{$product->sold}} SOLD</th>
                      <th>
                        <button type="button" class="btn btn-primary edit-product-btn" data-toggle="modal" data-target="#productDetailModal" onclick="loadProductData({{ $product->prod_id }})">
                          <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <form action="{{ route('product.destroy', $product->prod_id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-primary bc-red delete-product-btn">
                            <i class="fa-solid fa-xmark"></i>
                          </button>
                        </form>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>


<div class="modal" id="addProductModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm Sản Phẩm Mới</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="container mt-5">
          <div class="modal-body">
              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="brand">Danh mục:</label>
                      <select name="catalog_id" id="catalog_id" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @foreach($catalogs as $catalog)
                          <option value="{{ $catalog->catalog_id }}">{{ $catalog->catalog_name }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="brand">Brand:</label>
                      <input type="text" class="form-control" id="brand" name="brand" required>
                  </div>
                  <div class="form-group">
                      <label for="count">Count:</label>
                      <input type="number" class="form-control" id="count" name="count" required>
                  </div>
                  <div class="form-group">
                      <label for="discount">Discount:</label>
                      <input type="number" class="form-control" id="discount" name="discount">
                  </div>
                  <div class="form-group">
                      <label for="image">Image:</label>
                      <input type="file" class="form-control" id="image" name="image">
                  </div>
                  <div class="form-group">
                      <label for="info">Info:</label>
                      <textarea class="form-control" id="info" name="info" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="price">Price:</label>
                      <input type="number" class="form-control" id="price" name="price" required>
                  </div>
                  <div class="form-group">
                      <label for="prod_status">Status:</label>
                      <input type="text" class="form-control" id="prod_status" name="prod_status" required>
                  </div>
                  <div class="form-group">
                      <label for="sold">Sold:</label>
                      <input type="number" class="form-control" id="sold" name="sold" required>
                  </div>
                  <div class="form-group">
                      <label for="type">Type:</label>
                      <input type="text" class="form-control" id="type" name="type" required>
                  </div>
                  <button type="submit" class="btn btn-success">Save</button>
              </form>
          </div>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="productDetailModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thông Tin Sản Phẩm</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="container mt-5">
          <div class="modal-body">
              <form id="editProductForm">
                  @csrf
                  <input type="hidden" id="productId" name="productId">
                  <div class="form-group">
                  <label for="brand">Danh mục:</label>
                      <select name="productCatalog" id="productCatalog" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @foreach($catalogs as $catalog)
                          <option value="{{ $catalog->catalog_id }}">{{ $catalog->catalog_name }}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="discount">Discount:</label>
                      <input type="number" class="form-control" id="productDiscount" name="productDiscount">
                  </div>
                  <div class="form-group">
                      <label for="image">Image:</label>
                      <input type="file" class="form-control" id="image" name="image">
                  </div>
                  <div class="form-group">
                      <label for="info">Info:</label>
                      <textarea class="form-control" id="productName" name="productName" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="price">Price:</label>
                      <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                  </div>
                  <div class="form-group">
                      <label for="prod_status">Status:</label>
                      <input type="text" class="form-control" id="productStatus" name="productStatus" required>
                  </div>
                  <div class="form-group">
                      <label for="count">Count:</label>
                      <input type="number" class="form-control" id="productCount" name="productCount" required>
                  </div>
                  <div class="form-group">
                      <label for="type">Type:</label>
                      <input type="text" class="form-control" id="productType" name="productType" required>
                  </div>
                  <div class="form-group">
                      <label for="brand">Brand:</label>
                      <input type="text" class="form-control" id="productBrand" name="productBrand" required>
                  </div>
                  <button type="submit" class="btn btn-success">Save</button>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('js/pages/dashboard3.js')}}"></script>

<script>
  function loadProductData(prod_id) {
    $.ajax({
        url: '/product/' + prod_id,
        method: 'GET',
        success: function(data) {
            $('#productId').val(data.prod_id);
            $('#productName').val(data.info);
            $('#productPrice').val(data.price);
            $('#productDiscount').val(data.discount);
            $('#productCatalog').val(data.catalog_id);
            $('#productType').val(data.type);
            $('#productBrand').val(data.brand);
            $('#productCount').val(data.count);
            $('#productStatus').val(data.prod_status);
            $('#productImage').val(data.image);
            $('#editProductModal').modal('show');
        }
    });
  }
  $('#editProductForm').on('submit', function(e) {
      e.preventDefault();
      var formData = $(this).serialize();

      $.ajax({
          url: '/product/update',
          method: 'POST',
          data: formData,
          success: function(response) {
              alert(response.success);
              window.location.reload();
              // Reload page hoặc cập nhật danh sách sản phẩm ở đây nếu cần
          }
      });
  });
</script>
</body>
</html>
