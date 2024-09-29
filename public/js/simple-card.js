import { changeText } from "/js/main.js";

class SimpleCard extends HTMLElement {
    constructor() {
        super();
        this.innerHTML = `
            <div class="major-card card mb-3 w-100">
                <div class="card-body">
                    <h5 class="card-title m-0">Texto</h5>
                </div>
            </div>
        `;
    }
    
    static get observedAttributes() {
        return ["text"];
    }

    attributeChangedCallback(name, old_value, new_value) {
        if (name === "text") {
            changeText(".major-card .card-title", new_value);
        }
    }
}

customElements.define("simple-card", SimpleCard)