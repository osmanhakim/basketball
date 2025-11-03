import { useTranslation } from "react-i18next";
const Contact = () => {
  const { i18n, t } = useTranslation();
  return (
    <section className="contact-section bg-dark-grey" id="contact">
      <div className="container">
        <div className="row no-gutters">
          <div
            className="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInDown"
            data-wow-delay="300ms"
          >
            <h2 className="contact-heading text-center">
              {t("Let's Get In Touch")}
            </h2>
          </div>
        </div>
        <form
          method="post"
          action="http://localhost:8000/api/v1/sendmail"
          id="contact-form-data"
          className="contact-form wow fadeInUp"
          data-wow-delay="400ms"
        >
          <div className="row">
            <div className="col-12" id="result"></div>
            <div className="col-lg-5 col-md-12 col-sm-12">
              <div className="form-group">
                <input
                  className="form-control"
                  type="text"
                  id="quote_name"
                  placeholder="Your Name"
                  required=""
                  name="userName"
                />
              </div>
              <div className="form-group">
                <input
                  className="form-control"
                  type="email"
                  id="quote_email"
                  placeholder="Email"
                  required=""
                  name="userEmail"
                />
              </div>
              <div className="form-group">
                <input
                  className="form-control"
                  type="text"
                  id="quote_contact"
                  name="userPhone"
                  placeholder="Contact No."
                  required=""
                />
              </div>
            </div>
            <div className="col-lg-1 col-md-0 col-sm-0"></div>
            <div className="col-lg-6 col-md-12 col-sm-12">
              <div className="form-group">
                <textarea
                  className="form-control"
                  id="userMessage"
                  name="userMessage"
                  placeholder="Enquiry Details"
                ></textarea>
              </div>
            </div>
            <button
              className="btn btn-rounded btn-large orange-btn btn-hvr-black contact_btn w-100"
              onClick={() => {
                console.log("msg sent");
              }}
            >
              {t("Submit Information")}
            </button>
          </div>
        </form>
      </div>
    </section>
  );
};

export default Contact;
