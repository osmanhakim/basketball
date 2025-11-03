import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import Gallery from "./pages/Gallery";
import "./i18n";
import store from "./store";
import { Provider } from "react-redux";
import Index from "./sections/Index";
import Youtube from "./pages/Youtube";
import AboutUs from "./sections/AboutUs";
import Testimonial from "./sections/Testimonial";

const root = ReactDOM.createRoot(document.getElementById("root"));
const router = createBrowserRouter([
  {
    path: "/",
    element: <Index />,
    children: [
      {
        path: "/",
        element: <App />,
      },
      { path: "/gallery", element: <Gallery /> },
      {
        path: "/lesson",
        element: <Youtube />,
      },
      {
        path: "/about",
        element: <AboutUs />,
      },
      {
        path: "/test",
        element: <Testimonial />,
      },
    ],
  },
]);

root.render(
  <Provider store={store}>
    <RouterProvider router={router}></RouterProvider>
  </Provider>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
