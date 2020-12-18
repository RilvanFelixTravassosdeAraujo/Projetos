import { Row } from 'react-bootstrap';

export default function Home(props) {
    return (
        <Row>
            <div className="col-lg-6 col-sm-12 mx-auto">
                <h3><b>Seja bem vindo (a)!</b></h3>
                <p className="lead">
                    A melhor loja, <em><strong>de cosméticos</strong></em> do Brasil!
                </p>
            </div>
        </Row>
    );
}