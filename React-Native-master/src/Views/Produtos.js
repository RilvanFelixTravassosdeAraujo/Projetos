import React from 'react';
import { StyleSheet, Text, View, FlatList} from 'react-native';
import { LinearGradient } from 'expo-linear-gradient';

const DATA = [
    {
      id: Math.random(),
      nome: "Forno Airfryer | ",
      descricao: "Ovenfryer 10L Cuisinart 127V | ",
      preco: "R$1481.89"
    },
    {
      id: Math.random(),
      nome: "Fritadeira Elétrica | ",
      descricao: "Airfryer Viva Black Edition PHILIPS WALITA 220V | ",
      preco: "R$1253.89"
    },
    {
      id: Math.random(),
      nome: "Fritadeira Elétrica | ",
      descricao: "Airfryer Viva Philips Walita N 220V | ",
      preco: "R$1128.49"
    },
    {
      id: Math.random(),
      nome: "Geladeira Brastemp | ",
      descricao: "Frost Free Duplex 375 litros cor Inox com Espaço Adapt 110V | ",
      preco: "R$2249.10"
    },
    {
      id: Math.random(),
      nome: "Geladeira Electrolux | ",
      descricao: "Cycle Defrost 362 Litros DC44 Branco - 127V | ",
      preco: "R$1850.50"
    },
    {
      id: Math.random(),
      nome: "Refrigerador Brastemp | ",
      descricao: "BRM44HK Frost Free com Gavetão de Legumes Fresh Zone Inox - 375L - 220V | ",
      preco: "R$2338.99"
    },
    {
      id: Math.random(),
      nome: "Torradeira DeLonghi | ",
      descricao: "TTM400 Inox 600W 6 Temperaturas (110) | ",
      preco: "R$128.90"
    },
    {
      id: Math.random(),
      nome: "Torradeira Easyline | ",
      descricao: "Preta - 220v - Electrolux | ",
      preco: "R$129.00"
    }
  ]
  
  const _renderItem = ({item}) => 
    <Text style={styles.item}>
        {item.nome}
        {item.descricao}
        {item.preco}
    </Text>

  export default function Produtos() {
    return (
        <LinearGradient
          colors={['#283c86', '#45a247']}
          style={styles.gradient}
          start={{ x: 0, y: 0 }}
          end={{ x: 1, y: 1 }}
          >
  
    <View style={styles.inputContainer}>
        
        <View>
          <FlatList
          data = {DATA}
          renderItem = {_renderItem}
          />
        </View>

    </View>
      </LinearGradient>
    );
  }
  
  const styles = StyleSheet.create({
    gradient: {
      flex: 1,
      alignItems: 'center',
      justifyContent: 'center',
    },
    inputContainer: {
      flex: 1,
      paddingTop: 5,
    },
    item: {
      backgroundColor: 'rgba(251, 233, 237, 0.2)',
      padding: 10,
      margin: 8,
      borderRadius: 15,
      textAlign: 'center'
    },
  });
