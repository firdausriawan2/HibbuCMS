const Footer = () => {
    return (
        <>
            <div className="footer">

                <div className="container">
                    <div className="row">
                        <div className="col-md-4">
                            <h4 className="my-4 text-white text-center">Contact Us</h4>

                            <div className="footerContactUs">

                                <div className="perFooterContactUs">
                                    <i className="fas text-white fa-envelope"></i>
                                    <p className="text-white">firdausriawan2@gmail.com</p>
                                </div>

                                <div className="perFooterContactUs">
                                    <i className="fas text-white fa-phone-alt"></i>
                                    <p className="text-white">023423434234</p>
                                </div>

                                <div className="perFooterContactUs">
                                    <i className="fas text-white fa-road"></i>
                                    <p className="text-white">Jl. Tanjung Harapan, Kec. Tebing Tinggi - Kab. Kepulauan Meranti</p>
                                </div>

                            </div>

                        </div>






                        <div className="col-md-4">
                            <h4 className="my-4 text-center text-white">About</h4>
                            <div className="footerAbout">
                                <a href="" className="text-white">Artikel</a>
                                <a href="" className="text-white">Galeri</a>
                                <a href="" className="text-white">Contact Us</a>
                                <a href="" className="text-white">Ekstrakulikuler</a>
                            </div>
                        </div>


                        <div className="col-md-4 text-center">
                            <h4 className="my-4 text-white">Newsletter</h4>
                            <form>

                                <div className="form-group">
                                    <input className="form-control" type="search" placeholder="Example@gmail.com"
                                        aria-label="Search" />
                                    <button className="btn btn-primary btn-newsletter" type="submit">Kirim</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div className="footerCopyright">
                <p className="text-white">
                    <i className="far fa-copyright"></i>2022 Muhammad Firdaus Riawan
                </p>
            </div>
        </>
    )
}

export default Footer
