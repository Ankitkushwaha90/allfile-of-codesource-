import React from "react";
import './Navbar.css';
import './../node_modules/bootstrap/js/dist/carousel';

const Navbar = () => {
        return(
            <>
                <div className="navbar">
                    <div className="container">
                        <div className="logo_head">
                            <h3>Programming Tutorial</h3>
                        </div>
                        <div className="ul_contents">
                            <ul className='ulcss'>
                                <li className='licss'><a href="">HOME</a></li>
                                <li className='licss'><a href="">ABOUT</a></li>
                                <li className='licss'><a href="">SERVICES</a></li>
                                <li className='licss'><a href="">WORKS</a></li>
                                <li className='licss'><a href="">TEAM</a></li>
                                <li className='licss'><a href="">PRICES</a></li>
                                <li className='licss'><a href="">CONTACT</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </>
        )
}

export default Navbar;