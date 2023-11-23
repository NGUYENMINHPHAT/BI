
{% extends "base.php" %}

{% block content %}

<body>
<div class="container">

  <div class="jumbotron" > <br><br><br>
  <h1 class="display-5">Business Intelligence (BI)</h1>
    <h1 class="display-6" style="font-weight:400;color:#FF6600">Fruit Identification, Group 06!</h1>
    <p class="lead">Nền tảng website này được tạo bằng API <strong>Flask</strong>. Phục vụ mô hình dự đoán và nhận dạng trái cây.</p>
    <hr class="my-4">
    <p>Mô hình được đào tạo để dự đoán các loại trái cây có ngữ cảnh và cũng kiểm tra chất lượng của chúng trong hình ảnh nhất định bằng các kỹ thuật học <strong>Deep Learning, Machine Learning, CNN, DNN </strong> khác nhau.</p>
  </div>

</div>

<div class="container">
  <p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Giới Thiệu Nghiệp Vụ Thông Minh (CT255)
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body" align='left'>
    Mô hình được đào tạo trên các giải thuật Deep Learning, Machine Learning, CNN, DNN với các ngữ cảnh hình ảnh trong thế giới thực và 3 loại trái cây được đào tạo như 1. Apples, 2. Bananas, 3. Oranges. <br>
    Bằng cách nhấn vào mũi tên bên dưới, có thể tải lên bất kỳ hình ảnh nào trong điều kiện được kiểm tra bên dưới.<br><br>
    Đầu ra bằng cách nhấp vào nút "Gửi và dự đoán":
      <ul>
        <li><strong>Trực quan hóa xác suất cho từng loại trái cây được thực hiện bởi Classifier/Model.</strong> </li>
        <li><strong>Ngoài ra, dự đoán xác suất Trái cây tươi hoặc hư hỏng</strong></li>
      </ul>
    </div>
  </div>
    <hr>
  <form action="{{url_for("pred")}}"  method="POST" enctype="multipart/form-data">
    <h4>Nhấp vào mũi tên bên dưới để tải lên <strong>hình ảnh</strong>.</h4>

    <div class="form-group">
    <!-- <img src="../static/upload5.png" alt="img" width="20%" height="5%"> -->
    <label>
    <input type="file" name="file" id="file" style="display:none" accept="image/*" required>
    <img src="../static/upload5.png" width="50%">
    </label>
  </div>

    <div class="container">
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1">Đảm bảo đã tải lên hình ảnh liên quan đến <strong>1. Apples</strong>, <strong>2. Bananas</strong>, <strong>3. Oranges</strong></label>
    </div>

    </div>
  <br>
    <input type="submit" class="btn btn-secondary" name="Submit and predict" value="Gửi và dự đoán">
  </form>
  <br>
<br><br><br><br>
</div>


</body>
{% endblock %}
