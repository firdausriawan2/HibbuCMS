import { Link } from "@inertiajs/inertia-react"

const Header = () => {
    return (
        <nav className="navbar navbar-expand-lg navbar-light  navbarHome fixed-top">
            <div className="container">

                <a className="navbar-brand" href="#">
                    <img src="https://smkn01tt.files.wordpress.com/2018/10/cropped-logo-smktt.jpg?w=200" alt="Logo SMK N 2 Purbalingga" />
                    <h1>SMK Negeri 1<br />Tebing Tinggi</h1>
                </a>

                <button className="navbar-toggler hamburger" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>

                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul className="navbar-nav mr-auto ml-auto">
                        <li className="nav-item active">
                            <Link className="nav-link" href={route('dashboard')} as="button" >Home</Link>
                        </li>

                        <li className="nav-item active">
                            <a className="nav-link" href="galeri.html">Galeri</a>
                        </li>

                        <li className="nav-item active">
                            <a className="nav-link" href="artikel.html">Artikel</a>
                        </li>

                        <li className="nav-item active">
                            <a href="#" className="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>

                            <div className="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                <a className="dropdown-item" href="ekstrakulikuler.html">Ekstrakulikuler</a>
                                <div className="dropdown-divider"></div>
                                <a className="dropdown-item" href="kontak.html">Contact Us</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    )
}

export default Header
