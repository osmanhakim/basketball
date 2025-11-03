import { Outlet } from "react-router-dom";
import Footer from "./Footer";
import Header from "./Header";
import { basketAction } from "../store";
import { useTranslation } from "react-i18next";
import { useEffect } from "react";
import { useDispatch } from "react-redux";
const Index = () => {
  const dispatch = useDispatch();
  const { i18n, t } = useTranslation();
  useEffect(() => {
    dispatch(basketAction.setI18n(i18n));
  }, [dispatch, i18n]);
  return (
    <>
      <Header />
      <Outlet />
      <Footer />
    </>
  );
};
export default Index;
