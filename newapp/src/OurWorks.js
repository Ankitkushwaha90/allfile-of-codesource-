import React from "react";
import './../node_modules/bootstrap/dist/css/bootstrap.min.css';
import './OurWorks.css';
const OurWorks = () => {
        return(
            <>
                <div className=" container OurWokscss mt-5 pt-5 ">
                    <center><h2>OUR WORKS</h2></center>
                    
                    <center><p>What we are proud of</p></center>
                    <div className="ourlicss ">
                        <li  className="WcssO active" href="#">ALL</li>
                        <li  className="WcssO" href="#">WEBSITES</li>
                        <li  className="WcssO" href="#">WEB DESIGN</li>
                        <li  className="WcssO" href="#">APPS DEVELOPMENT</li>
                        <li  className="WcssO" href="#">GRAPHIC DESING</li>
                        <li  className="WcssO" href="#">RESPONSIVE</li>
                    </div>
                    <div className="workgrid container">
                        
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                        <div className="workimggrid">
                            <img src="./img/1.jpg" className="imgcss" />
                        </div>
                      
                        
                    </div>
                </div>
            </>
        )
}
export default OurWorks;