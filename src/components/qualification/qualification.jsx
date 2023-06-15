import { useState } from 'react';
import './qualification.css';

const Qualification = () => {
    const [toggleState, setToggleState] = useState(1);
    const toggleTab = (index) => {
        setToggleState(index);
    }
    return ( 
        <section className="qualification section">
            <h2 className="section_title">Qualification</h2>
            <span className="section_subtitle">My personel journey</span>

            
        <div className="qualification_container container">
            <div className="qualification_tabs">
                <div className={toggleState===1?"qualification_button qualification_active button--flex":"qualification_button button--flex"}
                        onClick={() => toggleTab(1)}>
                    <i className="uil uil-briefcase-alt qualification_icon"></i>{" "}
                    Experiance
                </div>
                <div className={toggleState===2?"qualification_button qualification_active button--flex":"qualification_button button--flex"}
                        onClick={() => toggleTab(2)}
                        >
                    <i className="uil uil-graduation-cap qualification_icon">
                        </i>Education
                </div>
            </div>
            
        <div className="qualification_sections">
            <div className={toggleState === 1? "qualification_content qualification_content-active": "qualification_content"}>
                <div className="qualification_data">
                    <div>
                        <h3 className="qualification_title">Senior Software Engineer</h3>
                        <span className="qualification_subtitle">
                            Intaps Consultance
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2021 - Present
                        </div>
                    </div>

                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>
                </div>

                <div className="qualification_data">

                    <div></div>
                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>

                    <div>
                        <h3 className="qualification_title">Lead Mobile app and Backend Developer</h3>
                        <span className="qualification_subtitle">
                            Tefer Consultance
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2021 - 2022
                        </div>
                    </div>

                </div>

                {/*  */}

                <div className="qualification_data">
                    <div>
                        <h3 className="qualification_title">Mobile app and Backend Development</h3>
                        <span className="qualification_subtitle">
                            Upwork
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2021 - 2022
                        </div>
                    </div>

                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>
                </div>

                <div className="qualification_data">

                    <div></div>
                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>

                    <div>
                        <h3 className="qualification_title">Front-end and Back-end development</h3>
                        <span className="qualification_subtitle">
                            Milfan Tech
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2021 - 2019
                        </div>
                    </div>

                </div>     
                <div className="qualification_data">
                    <div>
                        <h3 className="qualification_title">Mobile app Developer</h3>
                        <span className="qualification_subtitle">
                            Askual Tech
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2018 - 2020
                        </div>
                    </div>

                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>
                </div>

            </div>

            <div  className={toggleState === 2? "qualification_content qualification_content-active": "qualification_content"}>
                <div className="qualification_data">
                    <div>
                        <h3 className="qualification_title">Programming Contestant</h3>
                        <span className="qualification_subtitle">
                            ICPC - Programming Contest
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2018 - 2020
                        </div>
                    </div>

                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>
                </div>

                <div className="qualification_data">

                    <div></div>
                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>

                    <div>
                        <h3 className="qualification_title">Computer Science and Engineering</h3>
                        <span className="qualification_subtitle">
                            Adama Science and Technology University
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2015 - 2021
                        </div>
                    </div>

                </div>

                {/*  */}

                {/* <div className="qualification_data">
                    <div>
                        <h3 className="qualification_title">Web Designer</h3>
                        <span className="qualification_subtitle">
                            Accounting School in
                        </span>
                        <div className="qualification_calender">
                            <i className="uil uil-calendar-alt"></i> 2018 - 2020
                        </div>
                    </div>

                    <div>
                        <span className="qualification_rounder"></span>
                        <span className="qualification_line"></span>
                    </div>
                </div> */}
      
            </div>
        </div>
        </div>


        </section>

     );
}
 
export default Qualification;