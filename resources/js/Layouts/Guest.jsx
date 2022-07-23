import React from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/inertia-react';
import Header from '@/Components/Header';
import Footer from '@/Components/Footer';

export default function Guest({ children }) {
    return (
        <div>
            <Header />
                <div>
                    {children}
                </div>
            <Footer />
        </div>
    );
}
