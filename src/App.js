import './App.css';
import About from './components/about/about';
import Contact from './components/contact/contact';
import Footer from './components/footer/footer';
import Header from './components/header/header';
import Home from './components/home/home';
import Qualification from './components/qualification/qualification'; 
import Services from './components/services/services';
import Skills from './components/skills/skills';
import Testimonial from './components/testimonial/testimonial';

function App() {
  return (
     <>
      <Header />
      <main className='main'>
        <Home/>
        <About/>
        <Skills/>
        <Services/>
        <Qualification/>
        <Testimonial/>
        <Contact/>
        <Footer/>
      </main>
     </>
  );
}

export default App;
