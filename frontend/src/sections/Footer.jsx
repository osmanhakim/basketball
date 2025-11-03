const Footer = () => {
  return (
    <footer className="footer-sec bg-dark-grey text-center">
      <div className="container">
        <div className="row">
          <div className="col-md-12">
            <div className="footer-social">
              <ul className="list-unstyled text-center">
                <li>
                  <a className="wow fadeInUp" href="javascript:void(0);">
                    <i className="fab fa-facebook-f" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a className="wow fadeInDown" href="javascript:void(0);">
                    <i className="fab fa-x-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a className="wow fadeInUp" href="javascript:void(0);">
                    <i className="fab fa-google-plus-g" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a className="wow fadeInDown" href="javascript:void(0);">
                    <i className="fab fa-linkedin-in" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a className="wow fadeInUp" href="javascript:void(0);">
                    <i className="fab fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a className="wow fadeInDown" href="javascript:void(0);">
                    <i className="far fa-envelope" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <p className="company-about fadeIn text-center">
              &copy; 2024 MegaOne. Made With Love By{" "}
              <a href="javascript:void(0);" className="text-white">
                Themesindustry
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
