import Data from "./data";
import "./home.css";
import ScrollDown from "./scroll.down";
import Social from "./social";

const Home = () => {
    return ( 
        <section className="home section" id="home" style={{height: '100%'}}>
            <div className="home_container container grid">
                <div className="home_content grid">
                    <Social/>
                    <div className="home_img"></div>
                    <Data/>


                </div>
                <ScrollDown/>
            </div>
        </section>
     );
}
 
export default Home;