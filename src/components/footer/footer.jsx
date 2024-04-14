import "./footer.css";

const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer_container container">
        <h1 className="footer_title">John Ebenezer</h1>
        <ul className="footer_list">
          <li>
            <a href="#about" className="footer_link">
              About
            </a>
          </li>

          <li>
            <a href="#portfolio" className="footer_link">
              Projects
            </a>
          </li>

          <li>
            <a href="#testimonial" className="footer_link">
              Testimonials
            </a>
          </li>
        </ul>

        <div className="footer_social">
          <a
            href="https://instagram.com/abenezr_yohannes"
            className="footer_social-link"
            target="_blank"
          >
            <i className="uil uil-instagram"></i>
          </a>

          <a
            href="https://linkedin.com/in/abenezeryohannes"
            className="footer_social-link"
            target="_blank"
          >
            <i className="uil uil-linkedin"></i>
          </a>

          <a
            href="https://github.com/abenezeryohannes"
            className="footer_social-link"
            target="_blank"
          >
            <i className="uil uil-github-alt"></i>
          </a>
        </div>

        <span className="footer_copy">&#169; Ab_Jo. All rights reserved</span>
      </div>
    </footer>
  );
};

export default Footer;
