import React from 'react';

import { Head } from '@inertiajs/inertia-react';

import Sambutan from '@/Components/Index/Sambutan';
import Jurusan from '@/Components/Index/Jurusan';
import Artikel from '@/Components/Index/Artikel';
import Guest from '@/Layouts/Guest';
import Slider from '@/Components/Slider';

export default function Index(props) {
    // console.log('props : ', props)
    return (
        <Guest>
            <Slider />
            <Sambutan />
            <Jurusan />
            <Artikel header={'ARTIKEL TERBARU'} />
        </Guest>
    );
}
