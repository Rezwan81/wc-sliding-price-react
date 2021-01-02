import React, {useState} from 'react';
import './PriceSlider.css';

const PriceSlider = () => {
    // price hook
    const [price, setPrice] = useState('0');

    return (
        <>
            <input
                onChange={(e) => setPrice(e.target.value)}
                value={price}
                type="range"
                name="range"
                id="range"
                min="0" max="300" step="1" />
            {price}
        </>
    );
}

export default PriceSlider;