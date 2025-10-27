'use-client';

import React from 'react';
export default function Teste() {
    const name = "João Siles";

    // Valores para os cálculos
    const num1 = 20;
    const num2 = 10;

    // operações matématicas
    const soma = num1 + num2;
    const subtracao = num1 - num2;
    const multiplicacao = num1 * num2;
    const divisao = num1 / num2;

    return (
        <div style={styles.app}>
            <div style={styles.div}>
                <h1 style={styles.h1}>Olá {name}, é um prazer te conhecer!</h1>
                <p>Fazendo cálculo de soma, o resultado é: {soma}</p>
                <p>Fazendo cálculo de subtração, o resultado é: {subtracao}</p>
                <p>Fazendo cálculo de multiplicação, o resultado é: {multiplicacao}</p>
                <p>Fazendo cálculo de divisão, o resultado é: {divisao}</p>
            </div>
        </div>
    );
}
const styles = {
    app: {
        fontFamily: 'Arial, sans-serif',
        padding: '20px'
    },

    div: {
        backgroundColor: '#800000',
        padding: '10px',
        borderRadius: '1px',
    },

    h1: {
        color: '#ffffff',
        fontSize: '24px'
    }
}