export default class Pretty {
    constructor() {
        this.pretty_photo = "a[rel^='prettyPhoto'"
    }

    Init() {
        $(this.pretty_photo).prettyPhoto()
    }
}