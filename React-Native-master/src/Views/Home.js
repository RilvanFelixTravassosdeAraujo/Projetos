import React from 'react'
import { View } from 'react-native'

import TextCenter from '../components/TextCenter'

const Home = (props) => {
    return (
        <View style={{flex: 1}}>
            <TextCenter text="Bem vindo(a) a Cleo Eletrodomésticos, abaixo você encontra a área de login e alguns de nossos produtos, não deixe de nos visitar também através de nosso site, boas compras!" />
        </View>
    )
}

export default Home
