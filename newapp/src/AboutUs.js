import React from "react";
import './AboutUs.css';

const AboutUs = () => {
    return(
        <>
            <div className="aboutcss ">
                <center><h2>AboutUs</h2></center>
                
                <hr/>
                <div className="aboutcenter">
                    <div className="imgaboutcss">
                        <img src="./img/pexels-rodolfo-quirós-2330137.jpg"/>
                    </div>
                    <div className="contentext">
                        <h3>Programming Tutorial Course &gt;</h3>
                        <div className="contp p-1">
                        <p>About of Programming , Web Development, Web Designing, Andriod Development Courses are available. Learning about programming language skills are Developed.</p>
                        <button className="mt-1 btn btn-primary">Get Start</button>
                        </div>
                        
                    </div>
                </div>
                
            </div>

            
        </>
    )

}
export default AboutUs;