export class Main extends HTMLElement{
    constructor(){
        super();
        this.render();
    }
    
    render(){
        let modal1 = document.getElementById("myModal1");
        let modal2 = document.getElementById("myModal2");
        let modal3 = document.getElementById("myModal3");
        let modal4 = document.getElementById("myModal4");
        let btn1 = document.getElementById("openModal1");
        let btn2 = document.getElementById("openModal2");
        let btn3 = document.getElementById("openModal3");
        let btn4 = document.getElementById("openModal4");
        let span1 = document.getElementsByClassName("close1")[0];
        let span2 = document.getElementsByClassName("close2")[0];
        let span3 = document.getElementsByClassName("close3")[0];
        let span4 = document.getElementsByClassName("close4")[0];
        
        btn1.onclick = function() {
            modal1.style.display = "block";
        }
        
        btn2.onclick = function() {
            modal2.style.display = "block";
        }

        btn3.onclick = function() {
            modal3.style.display = "block";
        }

        btn4.onclick = function() {
            modal4.style.display = "block";
        }
        
        span1.onclick = function() {
            modal1.style.display = "none";
        }

        span2.onclick = function() {
            modal2.style.display = "none";
        }

        span3.onclick = function() {
            modal3.style.display = "none";
        }

        span4.onclick = function() {
            modal4.style.display = "none";
        }
        
        window.onclick = function(e) {
            if (e.target == modal1) {
                modal1.style.display = "none";
            }
        }

        window.onclick = function(e) {
            if (e.target == modal2) {
                modal2.style.display = "none";
            }
        }

        window.onclick = function(e) {
            if (e.target == modal3) {
                modal3.style.display = "none";
            }
        }

        window.onclick = function(e) {
            if (e.target == modal4) {
                modal4.style.display = "none";
            }
        }
    }
}

customElements.define("main-function", Main);