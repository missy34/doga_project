<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="">
</head>

<div class="header sp_menu">
    <div class="brand_img">
        <a href="/home"><img alt="logo" class="logo" src="{{ asset('/images/hanpo-logo.png') }}"></a>
    </div>
    <div>
        <div class="header-icon">
            <a href=""></i></a>
            <a href=""></i></a>
        </div>
    </div>
</div>
<div class="header-space"></div>
<style>
.header {
  position: fixed;
  width: 100%;
  height: 50px;
  background-color: #fff;
  display: flex;
  justify-content: space-between;
  margin-right: 32px;
  box-shadow: 0px 1px 2px rgba(151, 169, 177, 0.5);
  z-index: 100;
}

.brand_img {
  height: 50px;
  width: 100px;
}

.brand_img img {
  height: 50px;
  object-fit: cover;
  margin-left: 15px;
}

.header-space {
  width: 100%;
  height: 50px;
  right: 16px;
  align-items: center;
}

.header-icon {
  box-sizing: border-box;
  height: 50px;
  padding: 3px;
}

.header-icon i {
  box-sizing: border-box;
  margin-top: 10px;
  margin-right: 10px;
  font-size: 24px;
  color: rgb(92, 92, 92);
}

@media screen and (min-width: 781px) {
  .sp-menu {
    display: none;
  }
}

</style>