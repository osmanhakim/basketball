const Bredcumbs = () => {
  const img =
    "http://localhost:8000/uploads/seeders/bredcrumbs/standalone-img.jpg";
  return (
    <section class="page-title bg-overlay">
      <img
        style={{
          position: "absolute",
          top: "0",
          left: "0",
          width: "100%",
          height: "100%",
        }}
        src={img}
      />
      <div class="standalone-overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="standalone-heading">
              <h2 class="hide-cursor">StandAlone Page</h2>
              <ul class="page-breadcrumb link">
                <li>
                  <a href="../index-basket-ball.html">
                    <span class="icon fas fa-home"></span>Home
                  </a>
                </li>
                <li>
                  <i class="las la-angle-double-right pr-1"></i>
                  <span class="d-inline">{"StandAlone"} </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Bredcumbs;
