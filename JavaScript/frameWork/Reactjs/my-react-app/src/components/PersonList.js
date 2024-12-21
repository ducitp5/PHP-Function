import React from 'react';

import axios from 'axios';

export default class PersonList extends React.Component {
    state = {
        persons: []
    }

    componentDidMount() {
        let $promis = axios.get(`https://jsonplaceholder.typicode.com/users`);

        console.log('ppp', $promis)
        $promis.then(
            res => {
                console.log(1111, res);
                const persons = res.data;
                this.setState({ persons });
            }
        )
            .catch(error => console.log(error));
    }

    render() {
        return (
            <ul>
                { this.state.persons.map(person => <li>{person.name}</li>)}
            </ul>
        )
    }
}
