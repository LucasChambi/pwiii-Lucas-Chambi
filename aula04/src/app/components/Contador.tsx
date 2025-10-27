// para contador de likes

'use-client';

import { useState } from 'react';

export default function Contador() {
    const [likes, setLikes] = useState(0);

    function handleClick() {
        setLikes(likes + 1);
    }
    return (
        <div style={styles.app}>
            <button style={styles.button} onClick={handleClick}>
                Clique aqui {likes}
            </button>

            <p style={styles.paragraph}>Contador de likes: {likes}</p>
        </div>
    );
}

const styles = {
    app: {
        fontFamily: 'Arial, sans-serif',
        padding: '20px'
    },

    button: {
        backgroundColor: '#ffffff',
        color: '#800000',
        border: 'none',
        borderRadius: '4px',
        padding: '10px 20px',
        cursor: 'pointer',
        fontSize: '16px',
    },

    paragraph: {
        fontSize: '18px',
        fontWeight: 'bold',
        color: '#333333',
        marginTop: '10px',
        marginLeft: '10px'
    }
}