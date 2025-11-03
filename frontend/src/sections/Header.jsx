import { useTranslation } from "react-i18next";
import classes from "./Header.module.css";
import { useEffect, useRef, useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import { basketAction } from "../store";
import { useLocation } from "react-router-dom";
import { Link } from "react-router-dom";
const Header = () => {
  const { i18n, t } = useTranslation();
  const dispatch = useDispatch();
  // const [lang, setLang] = useState("en");
  // const change = (x) => {
  //   setLang(x);
  //   i18n.changeLanguage(x);
  //   document.documentElement.lang = x;
  //   document.documentElement.dir = x == "en" ? "ltr" : "rtl";
  // };
  const head = useRef();

  useEffect(() => {
    console.log("header");
  }, []);

  const lang = useSelector((state) => {
    return state.basket.lang;
  });
  const location = useLocation();
  console.log("current location", location.pathname);
  return (
    <header id="home" className={classes.header}>
      {/* <!--Navigation--> */}
      <nav className="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div className="container">
          <a href="#home" title="Logo" className="logo scroll">
            {/* <!--Logo Default--> */}
            <img
              src="http://localhost:8000/uploads/logoo.png"
              alt="logo"
              className=" m-0 logo-img"
            />
          </a>

          {/* <!--Nav Links--> */}
          <div className="collapse navbar-collapse" id="megaone">
            <div className="navbar-nav ml-auto">
              <a
                className="nav-link scroll  line"
                onClick={() => {
                  let x = lang == "en" ? "ar" : "en";
                  dispatch(basketAction.changeLanguage(x));
                }}
              >
                {lang == "en" ? "العربية" : "English"}
              </a>

              {location == "/" ? (
                <>
                  <Link className="nav-link scroll active line" to="/">
                    {t("Home")}
                  </Link>
                  <Link className="nav-link scroll line" to="/about">
                    {t("About Us")}
                  </Link>
                  <Link className="nav-link scroll line" to="/gallery">
                    {t("Gallery")}
                  </Link>
                  <Link className="nav-link scroll line" to="/test">
                    {t("Reviews")}
                  </Link>
                  <Link className="nav-link scroll line" to="/lesson">
                    {t("Lessons")}
                  </Link>
                  <a
                    href="#contact"
                    className="btn btn-medium btn-rounded btn-orange nav-button scroll"
                  >
                    {t("Get In Touch")}
                  </a>
                </>
              ) : (
                <>
                  <Link className="nav-link scroll active line" to="/">
                    {t("Home")}
                  </Link>
                  <Link className="nav-link scroll line" to="/about">
                    {t("About Us")}
                  </Link>
                  <Link className="nav-link scroll line" to="/gallery">
                    {t("Gallery")}
                  </Link>
                  <Link className="nav-link scroll line" to="/test">
                    {t("Reviews")}
                  </Link>
                  <Link className="nav-link scroll line" to="/lesson">
                    {t("Lessons")}
                  </Link>
                  <a
                    href="#contact"
                    className="btn btn-medium btn-rounded btn-orange nav-button scroll"
                  >
                    {t("Get In Touch")}
                  </a>
                </>
              )}
            </div>
          </div>
        </div>
        <Link
          className="sidemenu_btn"
          id="sidemenu_toggle"
          onClick={() => {
            console.log("head", head.current.classList);
            if (head.current.classList.contains("hide"))
              head.current.classList.remove("hide");
            else head.current.classList.add("hide");
          }}
        >
          <span></span>
          <span></span>
          <span></span>
        </Link>
        {/* <!--Side Menu Button--> */}
        <a id="close_side_menu " href=""></a>
        {location == "/" ? (
          <div className="sm-screen hide" ref={head}>
            <Link to="#Home">{t("Home")}</Link>
            <Link to="#about">{t("About Us")}</Link>
            <Link to="#gallery">{t("Gallery")}</Link>
            <Link to="#review">{t("Reviews")}</Link>
            <a
              className="nav-link scroll  line"
              onClick={() => {
                let x = lang == "en" ? "ar" : "en";
                dispatch(basketAction.changeLanguage(x));
              }}
            >
              {lang == "en" ? "العربية" : "English"}
            </a>
          </div>
        ) : (
          <div className="sm-screen hide" ref={head}>
            <Link to="../#Home">{t("Home")}</Link>
            <Link to="../#about">{t("About Us")}</Link>
            <Link to="../#gallery">{t("Gallery")}</Link>
            <Link to="../#review">{t("Reviews")}</Link>
            <a
              className="nav-link scroll  line"
              onClick={() => {
                let x = lang == "en" ? "ar" : "en";
                dispatch(basketAction.changeLanguage(x));
              }}
            >
              {lang == "en" ? "العربية" : "English"}
            </a>
          </div>
        )}
      </nav>
      {/* <!--Side Nav--> */}
    </header>
  );
};

export default Header;
