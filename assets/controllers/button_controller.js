import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    static values = { title: String }

    static targets = [ "total" ]

    increment() {
        this.totalTarget.textContent = parseInt(this.totalTarget.textContent) + 1;
    }

    connect() {
        this.totalTarget.textContent = 0;
    }

}
