import { useState } from 'react';
import './services.css';

const Services = () => {
    const [toggleState, setToggleState] = useState(0);
    const toggleTab = (index) => {
        setToggleState(index);
    }
    return ( 
        <section className="services section" id='services'>
            <h2 className="section_title">Services</h2>
            <span className="section_subtitle">What i offer</span>

            <div className="services_container container grid">
                
                <div className="services_content">
                    <div>
                        <i className="uil uil-web-grid services_icon"></i>
                        <h3 className="services_title">Front-end <br /> Development</h3>
                    </div>

                    <span className="services_button" onClick={() => toggleTab(1)} >View More
                        <i className="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div className={toggleState === 1?"services_modal active-modal":"services_modal"}>
                        <div className="services_modal-content">
                            <i className="uil uil-times services_modal-close" onClick={() => toggleTab(0)}></i>

                            <h3 className="services_modal-title">Front-end Development</h3>
                            <p className="services_modal-description">
                                Service with more than 3 years of experiance. Providing quality work to clients and companies.
                            </p>

                            <ul className="services_modal-services grid">
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I develop the user interface.
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Webpage development
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I create UX element interactions
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I postion your company brand.
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Design and mockups of products for companies.
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div className="services_content">
                    <div>
                        <i className="uil uil-cell services_icon"></i>
                        <h3 className="services_title"> Mobile App <br /> Development</h3>
                    </div>

                    <span className="services_button"  onClick={() => toggleTab(2)}>View More
                        <i className="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div className={toggleState === 2?"services_modal active-modal":"services_modal"}>
                        <div className="services_modal-content">
                            <i className="uil uil-times services_modal-close" onClick={() => toggleTab(0)}></i>

                            <h3 className="services_modal-title">Mobile App Development</h3>
                            <p className="services_modal-description">
                                Service with more than 3 years of experiance. Providing quality work to clients and companies.
                            </p>

                            <ul className="services_modal-services grid">
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I develop the user interface.
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Webpage development
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I create UX element interactions
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I postion your company brand.
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Design and mockups of products for companies.
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div className="services_content">
                    <div>
                        <i className="uil uil-arrow services_icon"></i>
                        <h3 className="services_title"> Backend <br /> Development</h3>
                    </div>

                    <span className="services_button"  onClick={() => toggleTab(3)}>View More 
                        <i className="uil uil-arrow-right services_button-icon"></i>
                    </span>

                    <div className={toggleState === 3?"services_modal active-modal":"services_modal"}>
                        <div className="services_modal-content">
                            <i className="uil uil-times services_modal-close"  onClick={() => toggleTab(0)}></i>

                            <h3 className="services_modal-title">Backend Development</h3>
                            <p className="services_modal-description">
                                Service with more than 3 years of experiance. Providing quality work to clients and companies.
                            </p>

                            <ul className="services_modal-services grid">
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I develop the user interface.
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Webpage development
                                    </p>
                                </li>

                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I create UX element interactions
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        I postion your company brand.
                                    </p>
                                </li>

                                
                                <li className="services_modal-service">
                                    <i className="uil uil-check-circle services_modal-icon"></i>
                                    <p className="services_modal-info">
                                        Design and mockups of products for companies.
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
     );
}
 
export default Services;