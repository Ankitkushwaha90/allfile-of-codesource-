import React,{Component}  from "react";
import './Avatar.css';
import 'tachyons';
import Avatarlist from "./Avatarlist";
import { render } from "react-dom";



    class Avatar extends Component{

        constructor(){
            super();
            this.state = {
                name: "Welcome to Avatar World"
                }
            }
            namechange(){
                this.setState({
                    name: "Hello world"
                })
            }
      
        
        render(){

            
const avatarlistarray = [
    {
        id: 1,
        name: "Welcome",
        work: "Web design"
    },{
        id: 2,
        name: "Bahadur",
        work: "Database"
    },{
        id: 3,
        name: "Naran",
        work: "BackEnd"
    },{
        id: 4,
        name: "hello",
        work: "Web developer"
    },{
        id: 5,
        name: "hello",
        work: "Web developer"
    },{
        id: 6,
        name: "hello",
        work: "Web developer"
    }
]

    const avatar = avatarlistarray.map((avatarcard, i) => {
    return <Avatarlist key={i} id="avatarlistarry[i].name" name={avatarlistarray[i].name} work={avatarlistarray[i].work}/>
        
})


            return (<div className="mainpage">
                <h1 className="tc">{this.state.name}</h1>
                {avatar}
                <button onClick= { () => this.namechange() }>Subcribe</button>
                </div>
            )
        } 
    }
   

export default Avatar;