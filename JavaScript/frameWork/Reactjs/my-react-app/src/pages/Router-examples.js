import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { HashRouter, Link } from "react-router-dom";
import Layout from "./Layout";
import Home from "./Home";
import Blogs from "./Blogs";
import Contact from "./Contact";
import NoPage from "./NoPage";

export default function RouterExamples() {
    return (
        <>
        <BrowserRouter>
            <Layout />
            <Routes>
                {/*<Route path="/" element={<Layout />}>*/}

                    <Route index element={<Home />} />
                    <Route path="blogs" element={<Blogs />} />
                    <Route path="contact" element={ <Contact /> } />
                    <Route path="*" element={<NoPage />} />
                {/*</Route>*/}
            </Routes>
        </BrowserRouter>
        </>
    );
}

// const Home = props => <h1>HOME</h1>
// const A = props => <h1>A</h1>
// const B = props => <h1>B</h1>

function CDE() {
    return (
        <div>
            {console.log("begin render 2- ")}
            <p>CDE </p>
        </div>
    )
}

function RouterExamples2() {
    const Home = props => <h1>HOME</h1>
    const A = props => <h1>A</h1>
    const B = props => <h1>B</h1>

    function CD() {
        return (
            <div>
                {console.log("begin render 2- ")}
                <p>CD </p>
            </div>
        )
    }

    return (
        <HashRouter>
            <ul>
                <li><Link to="/">TO HOME</Link></li>
                <li><Link to="/a">TO A</Link></li>
                <li><Link to="/b">TO B</Link></li>
                <li><Link to="/c/d">TO CD</Link></li>
                <li><Link to="/c/d/e">TO CDE</Link></li>

            </ul>

            {/* Routes setup for react-router-dom v6 */}
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="a" element={<A />} />
                <Route path="b" element={<B />} />
                <Route path="c/d" element={<CD />} />
                <Route path="c/d/e" element={<CDE />} />
                <Route path="*" element={<NoPage />} />
            </Routes>
        </HashRouter>
    );
}

export { RouterExamples2 }