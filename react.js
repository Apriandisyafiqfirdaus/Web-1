class ShoopingList extends React.Component {
    render() {
        return (
            <div className="shopping-list">
                <h1>Shopping List for {this.props.name}
                </h1>

                <ul>
                    <li>instagram</li>
                    <li>Whasapp</li>
                    <li>Oculus</li>
                </ul>
            </div>

        );
    }
    }
